import { SampleRepository } from "@/Repositories/SampleRepository";
import { SampleData } from "@/Types/SampleTypes";

export class SampleService {
    private repository: SampleRepository;

    constructor() {
        this.repository = new SampleRepository();
    }

    async getSampleData(): Promise<SampleData[]> {
        const data = await this.repository.fetchSampleData();
        return data.map((item) => ({
            ...item,
            createdAt: new Date(item.created_at).toLocaleDateString(),
        }));
    }
}